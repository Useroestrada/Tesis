<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarcaProveedorRequest;
use App\Http\Requests\UpdateMarcaProveedorRequest;
use App\Repositories\MarcaProveedorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MarcaProveedorController extends AppBaseController
{
    /** @var  MarcaProveedorRepository */
    private $marcaProveedorRepository;

    public function __construct(MarcaProveedorRepository $marcaProveedorRepo)
    {
        $this->marcaProveedorRepository = $marcaProveedorRepo;
    }

    /**
     * Display a listing of the MarcaProveedor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->marcaProveedorRepository->pushCriteria(new RequestCriteria($request));
        $marcaProveedors = $this->marcaProveedorRepository->all();

        return view('marca_proveedors.index')
            ->with('marcaProveedors', $marcaProveedors);
    }

    /**
     * Show the form for creating a new MarcaProveedor.
     *
     * @return Response
     */
    public function create()
    {
        return view('marca_proveedors.create');
    }

    /**
     * Store a newly created MarcaProveedor in storage.
     *
     * @param CreateMarcaProveedorRequest $request
     *
     * @return Response
     */
    public function store(CreateMarcaProveedorRequest $request)
    {
        $input = $request->all();

        $marcaProveedor = $this->marcaProveedorRepository->create($input);

        Flash::success('Marca Proveedor saved successfully.');

        return redirect(route('marcaProveedors.index'));
    }

    /**
     * Display the specified MarcaProveedor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $marcaProveedor = $this->marcaProveedorRepository->findWithoutFail($id);

        if (empty($marcaProveedor)) {
            Flash::error('Marca Proveedor not found');

            return redirect(route('marcaProveedors.index'));
        }

        return view('marca_proveedors.show')->with('marcaProveedor', $marcaProveedor);
    }

    /**
     * Show the form for editing the specified MarcaProveedor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $marcaProveedor = $this->marcaProveedorRepository->findWithoutFail($id);

        if (empty($marcaProveedor)) {
            Flash::error('Marca Proveedor not found');

            return redirect(route('marcaProveedors.index'));
        }

        return view('marca_proveedors.edit')->with('marcaProveedor', $marcaProveedor);
    }

    /**
     * Update the specified MarcaProveedor in storage.
     *
     * @param  int              $id
     * @param UpdateMarcaProveedorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarcaProveedorRequest $request)
    {
        $marcaProveedor = $this->marcaProveedorRepository->findWithoutFail($id);

        if (empty($marcaProveedor)) {
            Flash::error('Marca Proveedor not found');

            return redirect(route('marcaProveedors.index'));
        }

        $marcaProveedor = $this->marcaProveedorRepository->update($request->all(), $id);

        Flash::success('Marca Proveedor updated successfully.');

        return redirect(route('marcaProveedors.index'));
    }

    /**
     * Remove the specified MarcaProveedor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $marcaProveedor = $this->marcaProveedorRepository->findWithoutFail($id);

        if (empty($marcaProveedor)) {
            Flash::error('Marca Proveedor not found');

            return redirect(route('marcaProveedors.index'));
        }

        $this->marcaProveedorRepository->delete($id);

        Flash::success('Marca Proveedor deleted successfully.');

        return redirect(route('marcaProveedors.index'));
    }
}
