<?php/** * Created by PhpStorm. * User: Administrator * Date: 2017/9/22 * Time: 14:20 */namespace App\Services;use App\Http\Model\BalanceRecord2;class AccountRecordService{    public $accountRecord;    public function __construct()    {        $this->accountRecord = new BalanceRecord2();    }    /**     * 设置账户记录     * @return bool     */    public function setAccountRecord($user_id,$num,$type,$info,$is_add)    {        $balanceRecord = $this->accountRecord->create([            'user_id' => $user_id,            'num' => $num,            'type' => $type,            'info' => $info,            'is_add' => $is_add,        ]);        if(count($balanceRecord) == 0)            return false;        return true;    }}