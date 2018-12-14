<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\CouponCode;
use App\Exceptions\CouponCodeUnavailableException;
use Illuminate\Http\Request;

class CouponCodesController extends Controller
{
    public function show($code,Request $request)
    {
        if (!$record = CouponCode::where('code', $code)->first()) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }

        $record->checkAvailable($request->user());

        return $record;
    }
}
