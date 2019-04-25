#! /bin/bash



cd /var/www/html/tts

/usr/bin/curl "https://tts.voicetech.yandex.net/generate?format=wav&lang=ru-RU&speaker=oksana&emotion=good&key=API_KEY_HERE" -G --data-urlencode "text=$1" > alarm_message.wav

for i in *.wav; do /usr/bin/sox ./$i -t RAW -e a-law -r 8000 -c 1 -b 8 ./`echo $i| sed "s/wav/alaw/"`; done

