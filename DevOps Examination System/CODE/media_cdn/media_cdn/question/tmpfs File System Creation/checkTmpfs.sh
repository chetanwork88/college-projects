
check_if_dir_mounted()
{
    output=$(df -Th | grep tmpfs | awk '{print $7}')
    dir=$1 
    flag=0
    for i in $output
    do
        if [ $i == "$dir" ] ;
        then
        echo 1
        flag=1
        break    
        fi
    done
    if [ $flag -eq 0 ] ;
    then
        echo 0
    fi
}
result=$(check_if_dir_mounted "/src/mydir" )
echo $result
