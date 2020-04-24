
check_file_permission()
{
    [ -x $1 ] && W=1 || W=0
    echo $W
}

result=$(check_file_permission /src/input.txt)
echo $result
