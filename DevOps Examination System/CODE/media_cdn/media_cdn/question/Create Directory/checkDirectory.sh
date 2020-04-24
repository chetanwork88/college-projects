check_if_directory_exists()
{

    if [ -d $1 ]; then
        echo 1
    else
        echo 0
fi
}

result=$(check_if_directory_exists /src/test/codes)
echo $result

