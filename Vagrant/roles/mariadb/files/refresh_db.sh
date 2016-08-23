#!/bin/bash

#cleanup
rm -rf /tmp/db/*.gz

today=`aws s3 ls s3://ebco-backup/ebco_dbbackup/ | sort -n -r | head -1 | awk '{print $4}'`

echo "importing database $today"
aws s3 cp "s3://ebco-backup/ebco_dbbackup/$today" /tmp/db/
mv /tmp/db/$today homepage_sql.gz
