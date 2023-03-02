<?php

namespace App\Http\Controllers;

use App\Models\Sdipktkn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FetchController extends Controller
{
    public function getNew()
    {
        DB::beginTransaction();
        try{
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://sdipktkn.test/api/data',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $response = json_decode($response);
            $counterNewData = 0;
            if($response[0]){
                foreach($response[0] as $res){
                    //check if data exist then skip
                    if(Sdipktkn::where('id_data', $res->id)->first()){
                        continue;
                    }else{
                        $new = [
                            'id_data' => $res->id,
                            'gt' => $res->gt,
                            'crime_date' => $res->crime_date,
                            'potential_loss' => $res->potential_loss,
                            'saving' => $res->saving == 'null' ? Null : $res->saving,
                            'productivity' => $res->productivity,
                            'trip' => $res->trip,
                            'price' => $res->price,
                            'ministry_name' => $res->ministry->ministry_name,
                            'ministry_fullname' => $res->ministry->ministry_fullname,
                            'ship_type' => $res->ship->ship_type,
                            'action_name' => $res->status->action_name,
                            'crime_name' => $res->crime_type->crime_name
                        ];
                        Sdipktkn::create($new);
                        $counterNewData++;
                    }
                }
            }
            DB::commit();
            return response()->json(['message' => 'success', 'newData' => $counterNewData]);
        }catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'error' . $e], 500);
        }

    }
}
