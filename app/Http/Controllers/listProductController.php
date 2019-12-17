<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelistProductRequest;
use App\Http\Requests\UpdatelistProductRequest;
use App\Repositories\listProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class listProductController extends AppBaseController
{
    /** @var  listProductRepository */
    private $listProductRepository;

    public function __construct(listProductRepository $listProductRepo)
    {
        $this->listProductRepository = $listProductRepo;
    }

    /**
     * Display a listing of the listProduct.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->listProductRepository->pushCriteria(new RequestCriteria($request));
        $listProducts = $this->listProductRepository->all();

        return view('list_products.index')
            ->with('listProducts', $listProducts);
    }

    /**
     * Show the form for creating a new listProduct.
     *
     * @return Response
     */
    public function create()
    {
        return view('list_products.create');
    }

    /**
     * Store a newly created listProduct in storage.
     *
     * @param CreatelistProductRequest $request
     *
     * @return Response
     */
    public function store(CreatelistProductRequest $request)
    {
        $input = $request->all();

        $listProduct = $this->listProductRepository->create($input);

        Flash::success('List Product saved successfully.');

        return redirect(route('listProducts.index'));
    }

    /**
     * Display the specified listProduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $listProduct = $this->listProductRepository->findWithoutFail($id);

        if (empty($listProduct)) {
            Flash::error('List Product not found');

            return redirect(route('listProducts.index'));
        }

        return view('list_products.show')->with('listProduct', $listProduct);
    }

    /**
     * Show the form for editing the specified listProduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $listProduct = $this->listProductRepository->findWithoutFail($id);

        if (empty($listProduct)) {
            Flash::error('List Product not found');

            return redirect(route('listProducts.index'));
        }

        return view('list_products.edit')->with('listProduct', $listProduct);
    }

    /**
     * Update the specified listProduct in storage.
     *
     * @param  int              $id
     * @param UpdatelistProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelistProductRequest $request)
    {
        $listProduct = $this->listProductRepository->findWithoutFail($id);

        if (empty($listProduct)) {
            Flash::error('List Product not found');

            return redirect(route('listProducts.index'));
        }

        $listProduct = $this->listProductRepository->update($request->all(), $id);

        Flash::success('List Product updated successfully.');

        return redirect(route('listProducts.index'));
    }

    /**
     * Remove the specified listProduct from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $listProduct = $this->listProductRepository->findWithoutFail($id);

        if (empty($listProduct)) {
            Flash::error('List Product not found');

            return redirect(route('listProducts.index'));
        }

        $this->listProductRepository->delete($id);

        Flash::success('List Product deleted successfully.');

        return redirect(route('listProducts.index'));
    }
}
