<?php/** * Created by PhpStorm. * User: Administrator * Date: 2017/9/22 * Time: 14:54 */namespace App\Services;use App\Http\Model\DistributionRecord2;class ThreeRecordService{    public $distributionRecord;    public function __construct()    {        $this->distributionRecord = new DistributionRecord2();    }    public function setRecord($from_id, $to_id,$level, $num, $info)    {        $record = $this->distributionRecord->create([            'from_id' => $from_id,            'to_id' => $to_id,            'level'=>$level,            'num' => $num,            'info' => $info,        ]);        if (count($record) == 0)            return false;        return true;    }}