# AsteriskAlarmMessageViaTTS
Форма для вставки аварийных сообщений в Астериск. 

Сообщение подставляется в ИВР. 
Место куда будет подставляться сообщение прописывается в диалплане через #include файла.

Краткое how-to: 
В поле пишем текст который нужно вставить.
Жмем отправить.
Слушаем, перепроверяем что и как озвучило, если нужно возвращаемся обратно и фиксим интонацию согласно инструкции (там же, справа). 
Если все ок - жмем кнопочку включить - должно появится "Dialplan Reloaded". 

Если сообщение включено, там же будет плеер в котором можно прослушать сообщение, и кнопочка выключить - по нажатию так же должно появится "Dialplan Reloaded".

Из нюансов: 
Google chrome криво работает с кешем, а точней если часто генерить запись (чаще 1-го раза в 3-5 минут), то в плеере будет воспроизовдится та запись которая проигралась в первый раз, хотя фактически она уже изменится. В Microsoft Edge, Safari такой проблемы нет. 

Вся активность в приложении логируется.
