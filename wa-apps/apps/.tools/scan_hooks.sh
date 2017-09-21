egrep -r -i -o -E --include \*.php --exclude-dir={'apps','wa-data'} "wa(\)|.+)>event\(.+\)" > all_events.txt
