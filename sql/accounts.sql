truncate accounts;

insert into accounts (name, description, type,bic, iban, adviser, phone, image, created, modified)
values ('Zahlungskonto IVE/RNO',
        'Gemeinsame Ausgaben Eltern',
        'Privatkonto',
        'POFICHBEXXX',
        'CH85 0900 0000 3046 3778 6',
        'Sevil Aydin',
        '+41 58 448 14 14',
        'account_01',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
       );

insert into accounts (name, description, type,bic, iban, adviser, phone, image, created, modified)
values ('Girokonto RNO',
        'Gehaltskonto',
        'Privatkonto',
        'POFICHBEXXX',
        'CH95 0900 0000 4059 5517 3',
        'Sevil Aydin',
        '+41 58 448 14 14 ',
        'account_02',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
       );

insert into accounts (name, description, type,bic, iban, adviser, phone, image, created, modified)
values ('Zahlungskonto ENO',
        'Gemeinsame Ausgaben Unterhalt Ella',
        'Jugendkonto',
        'POFICHBEXXX',
        'CH12 0900 0000 8934 6644 5',
        'Sevil Aydin',
        '+41 58 448 14 14 ',
        'account_3',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
       );

insert into accounts (name, description, type,bic, iban, adviser, phone, image, created, modified)
values ('E-Sparkonto RNO',
        'Ansparen',
        'E-Sparkonto',
        'POFICHBEXXX',
        'CH78 0900 0000 9266 7078 2',
        'Sevil Aydin',
        '+41 58 448 14 14 ',
        'account_4',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
       );

insert into accounts (name, description, type,bic, iban, adviser, phone, image, created, modified)
values ('E-Sparkonto ENO',
        'Kindergeld',
        'E-Jugendsparkonto',
        'POFICHBEXXX',
        'CH10 0900 0000 9291 0806 4',
        'Sevil Aydin',
        '+41 58 448 14 14 ',
        'account_5',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
       );

insert into accounts (name, description, type,bic, iban, adviser, phone, image, created, modified)
values ('Deposit RNO',
        'Deposit RNO',
        'E-Sparkonto',
        'POFICHBEXXX',
        'CH75 0900 0000 9299 8775 1',
        'Sevil Aydin',
        '+41 58 448 14 14 ',
        'account_6',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
       );

insert into accounts (name, description, type,bic, iban, adviser, phone, image, created, modified)
values ('Anlage Ella',
        'ETF, Aktien',
        'E-Trading',
        '',
        '1077243',
        'Sevil Aydin',
        '+41 58 448 14 14 ',
        'account_7',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
       );

insert into accounts (name, description, type,bic, iban, adviser, phone, image, created, modified)
values ('Anlage Ralf',
        'ETF, Aktien',
        'E-Trading',
        '',
        '1627391',
        '',
        '',
        'account_8',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
       );

# insert into accounts (name, description, type,bic, iban, adviser, phone, image, created, modified)
# values ('',
#         '',
#         '',
#         '',
#         '',
#         '',
#         '',
#         '',
#         CURRENT_TIMESTAMP,
#         CURRENT_TIMESTAMP
#        );

select * from accounts;