#!/bin/bash

check_if_n_file_exists()
{
    flag=0
    for i in `seq -w 1 $1`
    do
      if [ -e FILE-$i.txt ]
        then
            flag=1
            :
        else
            echo 0
            break
      fi
    done
    if [ $flag -eq 1 ]
        then
            echo 1
    fi
}
result=$(check_if_n_file_exists 10)
echo $result

