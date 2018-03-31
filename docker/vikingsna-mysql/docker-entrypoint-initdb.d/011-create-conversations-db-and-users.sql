create database conversations;
create user conversations@`%` identified by 'convo';
grant all privileges on conversations.* to conversations@`%`;

