
<style>
body{
    background-color: #FFF;
}
       
div#calendar{
  margin:0px auto;
  padding:0px;
  width: 602px;
}
 
div#calendar div.box{
    position:relative;
    width:100%;
    height:50px;
    background-color:  purple ;      
}
 
div#calendar div.header{
    line-height:50px;  
    position:absolute;
    left:11px;
    width:582px;
    height:40px;   
    text-align:center;
}
 
div#calendar div.header span.title{
    color:white;
    font-size:20px;
}

div#calendar div.box-content{
    border:1px solid black ;
} 
 
div#calendar ul.label{
    float:left;
    margin: 0px;
    padding: 0px;
    margin-top:5px;
    margin-left: 5px;
}
 
div#calendar ul.label li{
    
    margin-right:5px;  
    float:left;
    list-style-type:none;
    width:80px;
    height:40px;
    line-height:40px;
    vertical-align:middle;
    text-align:center;
    color:#000;
    font-size: 15px;
    background-color: orange;
    opacity: 90%;
}

div#calendar ul.dates{
    float:left;
    margin: 0px;
    padding: 0px;
    margin-left: 5px;
    margin-bottom: 5px;
}
 

div#calendar ul.dates li{
    margin:0px;
    padding:0px;
    margin-right:5px;
    margin-top: 5px;
    line-height:80px;
    vertical-align:middle;
    float:left;
    list-style-type:none;
    width:80px;
    height:80px;
    font-size:25px;
    background-color: plum;
    opacity: 80%;
    color:#000;
    text-align:center; 
}
div.clear{
    clear:both;
}

</style>
<center>
<?php

class Student
{
    public $First_Name;
    public $Last_Name;
    public $Degree_and_Year;
    public $Birthday;
}

$student = new Student();
$calendar = new Calendar();



$student->First_Name = "Richel Jane ";
$student->Last_Name = "Bacayan ";
$student->Degree_and_Year = "Certificate of Computer Technology, Second Year Level ";
$student->Birthday = "February 06, 2001";
echo "</br>";
echo "Hello, my name is " . $student->First_Name . $student->Last_Name ."I am currently taking up ".$student->Degree_and_Year ."and I was born on " .$student->Birthday.". " ;
echo "</br>";
echo "</br>";
echo "</br>";

echo $calendar->show();


class Calendar {  
    private $dayLabels = array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
     
     
    private $latestDay=0;
    private $currentDate=null;
    private $daysInMonth=0;
     
    
    public function show() {
        $year  = 2001;
        $month = 2;
      
        $this->currentYear=$year;
         
        $this->currentMonth=$month;
         
        $this->daysInMonth=$this->_daysInMonth($month,$year);  
         
        $content='<div id="calendar">'.
                        '<div class="box">'.
                        $this->_createNavi().
                        '</div>'.
                        
                        '<div class="box-content">'.
                                '<ul class="label">'.$this->_createLabels().'</ul>';   
                                $content.='<div class="clear"></div>';     
                                $content.='<ul class="dates">';   
                                 
                                 
                                $weeksInMonth = $this->_weeksInMonth($month,$year);
                                // Create weeks in a month
                                for( $i=0; $i<$weeksInMonth; $i++ ){
                                     
                                    //Create days in a week
                                    for($j=1;$j<=7;$j++){
                                        $content.=$this->_showDay($i*7+$j);
                                    }
                                }
                                 
                                $content.='</ul>';
                                 
                                $content.='<div class="clear"></div>';     
             
                        $content.='</div>';
                 
        $content.='</div>';
        return $content;   
    }
    private function _showDay($cellNumber){
         
        if($this->latestDay==0){
             
            $firstDayOfTheWeek = date('N',strtotime($this->currentYear.'-'.$this->currentMonth.'-01'));
                     
            if(intval($cellNumber) == intval($firstDayOfTheWeek)){
                 
                $this->latestDay=1;
                 
            }
        }
         
        if( ($this->latestDay!=0)&&($this->latestDay<=$this->daysInMonth) ){  
            $cellContent = $this->latestDay;  
            $this->latestDay++;   
             
        }else{
             
            $this->currentDate =null;
 
            $cellContent=null;
        }
             
         
        return '<li id="li-'.$this->currentDate.'" class="'.($cellNumber%7==1?' start ':($cellNumber%7==0?' end ':' ')).
                ($cellContent==null?'mask':'').'">'.$cellContent.'</li>';
    }
     
    private function _createNavi(){        
              return
            '<div class="header">'.
                
                    '<span class="title">'.date('Y M',strtotime($this->currentYear.'-'.$this->currentMonth.'-1')).'</span>'.
                
            '</div>';
    }
         
    private function _createLabels(){  
                 
        $content='';
         
        foreach($this->dayLabels as $index=>$label){
             
            $content.='<li class="'.($label==6?'end title':'start title').' title">'.$label.'</li>';
 
        }
         
        return $content;
    }
    
     
    private function _weeksInMonth($month=null,$year=null){
         
        $daysInMonths = $this->_daysInMonth($month,$year);
         
        $numOfweeks = ($daysInMonths%7==0?0:1) + intval($daysInMonths/7);
         
        $monthEndingDay= date('N',strtotime($year.'-'.$month.'-'.$daysInMonths));
         
        $monthStartDay = date('N',strtotime($year.'-'.$month.'-01'));
         
        if($monthEndingDay<$monthStartDay){
             
            $numOfweeks++;
         
        }
         
        return $numOfweeks;
    }
 
    private function _daysInMonth($month=null,$year=null){  
        return date('t',strtotime($year.'-'.$month.'-01'));
    }
     
}
?>
</center>

  
