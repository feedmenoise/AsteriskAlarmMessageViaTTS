echo "exten => s,n,Playback(/var/www/html/tts/alarm_message)" > /etc/asterisk/alert.conf
sudo asterisk -rx "dialplan reload"
