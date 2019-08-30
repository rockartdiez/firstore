<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Controller;
use App\WhItemMst;

class ItemController extends Controller
{
    protected $page_title = 'Master Produk';

    public function index(Request $request)
    {
        // $data = WhItemMst::paginate($this->paginate);

        $params = [
            'page_title'    => $this->page_title,
            // 'data'          => $data
        ];

        return view('backend.item', $params);
    }

    public function showForm(Request $request)
    {
        $action = $request->action;
        $isOK = true;

        switch($action)
        {
            case 'new':
                $page_title = 'Tambah Data ' . $this->page_title;
                $data = [ 'is_active' => true ];
                break;
            case 'edit':
                $id = $request->id;
                $isOK = $this->isDataExists($id, $data);
                $page_title = 'Edit Data ' . $this->page_title;
                break;
        }

        if (!$isOK) return redirect()->route('product.index');

        $params = [
            'page_title'    => $page_title,
            'data'          => $data
        ];
        return view('backend.productForm', $params);
    }

    public function action(Request $request)
    {
        $action = $request->action;
        $id     = $request->id;

        $isOK   = true;

        if ($id)
        {
            $isOK = $this->isDataExists($id, $data);

            if ($action=='delete')
            {
                $used = false;
                if ($used)
                {
                    $isOK = false;
                    $this->messageError('Unable to delete data [ID #' . $id . '] because it has been used. Set to inactive if data is no longer needed.');
                }
            }
        }
        else
        {
            $data = new WhItemMst;
        }

        if ($isOK)
        {
            switch($action)
            {
                case 'save':
                    $data->fill($request->only($data->getFillable()));
                    if (!isset($request->sys_is_active)) $data->sys_is_active = 0;
                    $result = $data->save();
                    if($result)
                    {
                        $this->messageSuccess('Data [ID #' . $id . '] saved successfully.');
                    }
                    else
                    {
                        $this->messageError('Unable to save data' . ($id ? ' [ID #' . $id .']' : ''). '.');
                    }
                    break;

                case 'delete':
                    $result = $data->destroy($id);
                    if ($result)
                    {
                        $this->messageSuccess('Data [ID #' . $id . '] deleted successfully.');
                    }
                    else
                    {
                        $this->messageError('Unable to delete data [ID #' . $id . '].');
                    }
                    break;
            }
        }
        return redirect()->route('product.index');
    }

    private function isDataExists($id, &$data)
    {
        $data = WhItemMst::find($id);
        if (!$data)
        {
            $this->messageError('Data with ID #' . $id . ' was not found.');
            return false;
        }
        return true;
    }
}
