# mysql_homework

Стенд разворачивается с помощью Vagrant, настройка выполняется с помощью ansible-playbook.
На всех ВМ для упрощения выключен firewalld, selinux переведен в режим permissive.

##### Порядок запуска:
```
git clone <this repo>
vagrant up
ansible-playbook main.yml
```
#### Проверка;
Для проверки работы зайти браузером по адресу http://192.168.7.151 или  http://192.168.7.152

![alt text](https://github.com/KotUchoniy/mysql_homework/blob/main/MySQL1.jpg?raw=true)


##### Комментарии:

| IP адрес | Имя машины |
|-----|--------------------|
| 192.168.7.151 | nginx1 |
| 192.168.7.152 | nginx2 |
| 192.168.7.141 | backend1 |
| 192.168.7.142 | backend2 |
| 192.168.7.143 | backend3 |
| 192.168.7.161 | bdms1 |
| 192.168.7.162 | bdms2 |
| 192.168.7.171 | balancer1 |
