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

check_if_port_changed()
{
    output=$(cat /etc/apache2/ports.conf | grep Listen | awk '{print $2}')
    port=$1 
    flag=0
    
    for i in $output
    do
        if [ $i == $port ] ;
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

result1=$(check_if_service_exists apache2)

if [ $result1 -eq 1 ]
then
	result=$(check_if_port_changed 8889 )
	echo $result
else
	echo 0
fi
