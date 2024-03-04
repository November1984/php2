<?php


class MyErrorException extends Exception {}
class HttpErrorException extends Exception {}
function foo(): bool{
    try {
        
        throw new MyErrorException("error\n");
    } catch (MyErrorException $exception) {
        echo "error1\n";
        echo $exception->getMessage();
        return false;
    };
    
    return true;
}

try{
    echo "start\n";
    var_dump(foo());
    echo "end\n";
}
catch (Exception $exception){
    echo "error2\n";
    echo $exception->getMessage();
}