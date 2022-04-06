awk '
FNR==1{
  for(i=1;i<=NF;i++){
    array[i]=$i
  }
}
{
  for(i=1;i<=NF;i++){
    if($i=="statistics"){
      print "Line number is: " FNR ", column number is: "i ",column heading is:" array[i]
    }
  }
}
' Input_file
