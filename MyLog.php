<?php
namespace efimova;
use core\LogInterface;
use core\LogAbstract;
class MyLog extends LogAbstract implements LogInterface
{
    public function __log($str)
    {
      $this->log[] = $str;
    }
    public static function log($str):void
    {
       self::Instance()->__log($str);
    }

    public static function write():void
    {
        MyLog::Instance()->_write();
    }

    public function _write()
    {
        $log = '';        
        foreach($this->log as $el){
            $log .= $el."\n";
        }
        echo $log;
        $d = new \DateTime();
        $file = "./Log/". $d->format('d-m-Y\TH_i_s_u').".log";
        if (!is_dir('./Log/')) {
            mkdir("./Log/");
        }
        file_put_contents($file,$log);
    }
}

?>