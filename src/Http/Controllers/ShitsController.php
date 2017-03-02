<?php

namespace Scool\Curriculum\Http\Controllers;

use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ShitsCreateRequest;
use App\Http\Requests\ShitsUpdateRequest;
use App\Repositories\ShitsRepository;
use App\Validators\ShitsValidator;

class ShitsController extends Controller
{

    /**
     * @var ShitsRepository
     */
    protected $repository;

    /**
     * @var ShitsValidator
     */
    protected $validator;

    public function __construct(ShitsRepository $repository, ShitsValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $shits = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $shits,
            ]);
        }

        return view('shits.index', compact('shits'));
    }

    /**
     * Show the form for creating the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ShitsCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ShitsCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $shit = $this->repository->create($request->all());

            $response = [
                'message' => 'Shits created.',
                'data'    => $shit->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shit = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $shit,
            ]);
        }

        return view('shits.show', compact('shit'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $shit = $this->repository->find($id);

        return view('shits.edit', compact('shit'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ShitsUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ShitsUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $shit = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Shits updated.',
                'data'    => $shit->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Shits deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Shits deleted.');
    }
}
