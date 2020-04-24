#!/bin/bash
check_if_directory_exists()
{     
    if [ -e $1 ]
    then
        echo 1
    else
        echo 0
    fi
}

result1=$(check_if_directory_exists /src/input.txt)
if [ $result1 -eq 0 ]
then
    result2=$(check_if_directory_exists /src/test/input.txt)
    echo $result2
else
    echo 0
fi

