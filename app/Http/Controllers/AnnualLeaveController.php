<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Interfaces\AnnualLeaveRepositoryInterface;
use Illuminate\Support\Facades\Validator;

class AnnualLeaveController extends Controller
{    
    private AnnualLeaveRepositoryInterface $annualLeaveRepository;

    public function __construct(AnnualLeaveRepositoryInterface $annualLeaveRepository) 
    {
        $this->annualLeaveRepository = $annualLeaveRepository;
        $this->filter = [
            'user_id',
            'start_date',
            'end_date',
            'description'
        ];
    }

    public function list(): JsonResponse 
    {
        $inputFilter = request()->post('filter') ?? [];
        $page = request()->post('page') ?? 1;
        $perPage = request()->post('perPage') ?? 10;
        $data = $this->annualLeaveRepository->getList(setFilterInput($this->filter, $inputFilter), $page, $perPage);

        $response = setResponseDataList($data, 'annual_leave');
        return response()->json($response, getCodeResponse($response['success'], 'get'));
    }

    public function create(): JsonResponse 
    {
        $rules = [
            'user_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ];

        $validator = Validator::make(request()->all(), $rules);

        if ($validator->fails()) {
            return response()->json(
                setResponse(false, 'Parameter yang diinput belum sesuai', $validator->messages()->toArray()),
                getCodeResponse(false, 'post')
            );
        } else {
            $data = $this->annualLeaveRepository->create(request()->post());

            if ($data) {
                return response()->json(setResponse(true, 'Simpan data berhasil'), getCodeResponse(true, 'post'));
            } else {
                return response()->json(setResponse(false, 'App Server Error'), getCodeResponse(false, 'post'));
            }
        }
    }

    public function find(string $id): JsonResponse 
    {
        $annual_leaves = $this->annualLeaveRepository->find($id);

        if ($annual_leaves) {
            $data = [
                'annual_leaves' => $annual_leaves
            ];

            return response()->json(setResponse(true, '', $data), getCodeResponse(true, 'get'));
        } else {
            return response()->json(setResponse(false, 'Data tidak ditemukan'), getCodeResponse(false, 'get'));
        }
    }
}