#!/bin/bash

#cleanup
rm -rf *.gz

today=`aws s3 ls --profile ebco s3://ebco-backup/ebco_dbbackup/ | sort -n -r | head -1 | awk '{print $4}'`

echo "importing database $today"
aws s3 cp --profile ebco "s3://ebco-backup/ebco_dbbackup/$today" .
mv $today homepage_sql.gz 
