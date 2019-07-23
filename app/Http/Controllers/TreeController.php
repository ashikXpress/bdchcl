<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function tree()
    {
        $tree = array(
            $treeOne = array(
                $treeTwo = array(
                    $bo = 'Business Owner',
                    $asm = 'Area Sales Manager',
                    $m = 'manager',
                    $rsm = 'Regional sales manager',
                    $gm = 'General Manager',
                    $pd = 'Project Director'
                ),
                $treeThree = array(
                    $bo = 'Business Owner',
                    $asm = 'Area Sales Manager',
                    $m = 'manager',
                    $rsm = 'Regional sales manager',
                    $gm = 'General Manager',
                    $pd = 'Project Director'
                )
            ),

        );
        return view('welcome', $tree);
    }
}
