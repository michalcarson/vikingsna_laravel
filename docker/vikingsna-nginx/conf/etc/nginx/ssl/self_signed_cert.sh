#!/bin/bash

openssl req -new -key key.pem \
  -x509 \
  -days 3650 \
  -out cert.pem \
  -sha256 \
  -subj '/C=US/ST=Oklahoma/L=OklahomaCity/O=VikingsNA/OU=SysOps/CN=*.vikingsna.com/emailAddress=noreply@vikingsna.com' \
  -reqexts req_ext \
  -extensions req_ext \
  -config <(cat /etc/ssl/openssl.cnf <(printf "[req_ext]\nsubjectAltName=DNS:*.vikingsna.com,DNS:vikingsna.com\nbasicConstraints = CA:TRUE"))
