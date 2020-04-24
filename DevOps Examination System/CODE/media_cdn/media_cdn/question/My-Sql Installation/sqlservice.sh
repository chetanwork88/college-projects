#!/bin/bash
check_if_service_exists()
{
    ps_out=`ps -ef | grep $1 | grep -v 'grep' | grep -v $0`
    result=$(echo $ps_out | grep "$1")
    if [[ "$result" != "" ]];then
        echo 1
    else
        echo 0
    fi
}

result=$(check_if_service_exists mysql)
echo $result

