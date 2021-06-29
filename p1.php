
<?php
$file=fopen("abc.txt","r");
$cont=readfile("abc.txt");
echo"<br>";
$str=file_get_contents("abc.txt");
$vCount=0;
$cCount=0;
$dCount=0;
$sCount=0;
$str=strtolower($str);
for($i=0;$i<strlen($str);$i++){
	if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'){
		$vCount++;

	}
	elseif($str[$i]>='a' && $str[$i]<='z')  {
		$cCount++;
	}
	elseif($str[$i]>='0' && $str[$i]<='9')  {
		$dCount++;
	}
	else{
		$sCount++;
	}
	$line=count(file("abc.txt"));
	echo"Number of line:",$line;
	echo"Number of words:",str_word_count($str)."<br>";
	echo"Number of characters:",mb_strlen($str)."<br>";
	echo"Number of Vowels:",$vCount."<br>";
	echo"Number of Consonents:",$cCount."<br>";
	echo"Number of Digits:",$dCount."<br>";
	//echo"Number of Special charactee:",$dcount;
	$data=filesize("abc.txt");
	echo"size of the file:".$data;
	fclose($file);
	
	
	
	



}
?>