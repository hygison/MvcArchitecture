<?php
    /**
     * Calculate time in during our operation
     * Operation TIme
     * 
     */


    trait OperationTime{

        // OP = OPERATION
        public $opStartTime;
        public $opEndTime;
        
        public $opDate;
        public $opArr = [];

        public $opTimeSecondsArr = [];
        

        public $opTimeSeconds = 0;

        public function __construct(){
            
        }

        public function OP_setOpDate(){
            
            $this->opStartTime = date("Y-m-d");
        }
        public function OP_setOpStartTime(){
            
            $this->opStartTime = date("h:i:s A");
        }
        public function OP_setOpEndTime(){
            
            $this->opEndTime = date("h:i:s A");
        }

        public function OP_saveOpTime($description = null){
            if($description !== null){
                $this->opArr[] = date("h:i:s A");
            }else{
                $this->opArr[$description] = date("h:i:s A");
            }   
        }


        public function OP_getOpTime($startTime, $endTime){
            if(!empty($startTime) && !empty($endTime)){
                $startTime = strtolower($startTime);
                $endTime = strtolower($endTime);

                $startTime = str_replace('am','',$startTime);
                $startTime = str_replace('pm','',$startTime);
                $endTime = str_replace('am','',$endTime);
                $endTime = str_replace('pm','',$endTime);
                
                $hour_s = explode(':', $startTime)[0];
                $min_s = explode(':', $startTime)[1];
                $sec_s = explode(':', $startTime)[2];

                $hour_e = explode(':', $endTime)[0];
                $min_e = explode(':', $endTime)[1];
                $sec_e = explode(':', $endTime)[2];

                $secondsFromHour = ($hour_e - $hour_s) * 60 * 60;
                $secondsFromMin = ($min_e - $min_s) * 60;
                $secondsFromSec = ($sec_e - $sec_s);
                $this->opTimeSeconds = $secondsFromHour + $secondsFromMin + $secondsFromSec;
            }
            return $this->opTimeSeconds;
        }
        
        public function removeAMPM($time){
            $time = strtolower($time);
            $time = str_replace('am','',$time);
            $time = str_replace('pm','',$time);
            return $time;
        }
    }



?>