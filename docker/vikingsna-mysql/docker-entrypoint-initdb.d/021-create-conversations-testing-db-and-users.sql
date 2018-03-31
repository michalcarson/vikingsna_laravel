create database conversations_testing;
create user tester@`%` identified by 'convo';
grant all privileges on conversations_testing.* to tester@`%`;

