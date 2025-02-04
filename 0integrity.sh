files=(history*)
count=${#files[@]}
for (( i=0 ; i < count ;i++ )); do 
    for (( j=i+1 ; j < count ; j++ )); do
        sdiff -s "${files[i]}" "${files[j]}" > /dev/null
        if [ $? -eq  0 ]
        then
            echo "${files[i]} and ${files[j]} are the same"
        fi
    done
done