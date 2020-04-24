
check_file_permission()
{
    [ -w $1 ] && W=1 || W=0
    echo $W
}

result=$(check_file_permission /src/input.txt)
echo $result
