<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as RealController;
use Session;

class Controller extends RealController
{
    protected $paginate = 10;
    protected $page_title;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function toObject($array)
    {
        return json_decode(json_encode($array));
    }

    public function sessionMessage($type, $msg, $class='')
    {
        Session::flash('message', $this->toObject(['type'=>$type, 'text'=>$msg, 'class'=>$class]));
    }

    public function messageSuccess($msg)
    {
        $this->sessionMessage('success', $msg, 'alert alert-success alert-dismissible fade in');
    }

    public function messageInfo($msg)
    {
        $this->sessionMessage('info', $msg, 'alert alert-info salert-dismissible fade in');
    }

    public function messageWarning($msg)
    {
        $this->sessionMessage('warning', $msg, 'alert alert-warning salert-dismissible fade in');
    }

    public function messageError($msg)
    {
        $this->sessionMessage('error', $msg, 'alert alert-danger salert-dismissible fade in');
    }
}
