CREATE TABLE "ESBUSER"."ADMIN" 
   (  "USER_ID" VARCHAR2(255) NOT NULL ENABLE, 
  "PASSWORD" VARCHAR2(255) NOT NULL ENABLE, 
  "STATUS" VARCHAR2(255) NOT NULL ENABLE, 
   CONSTRAINT "PRIMARY_KEY_USERID" PRIMARY KEY ("USER_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS"  ENABLE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS" ;

CREATE TABLE "ESBUSER"."FT_CUSTOMERS" 
   (  "ID" NUMBER(38,0), 
  "APP_ID" VARCHAR2(20) NOT NULL ENABLE, 
  "NAME" VARCHAR2(100) NOT NULL ENABLE, 
  "IDENTITY_USER_ID" VARCHAR2(255) NOT NULL ENABLE, 
  "ALLOW_NEFT" VARCHAR2(1) NOT NULL ENABLE, 
  "ALLOW_IMPS" VARCHAR2(1) NOT NULL ENABLE, 
  "ALLOW_RTGS" VARCHAR2(1) NOT NULL ENABLE, 
  "ENABLED" VARCHAR2(1) DEFAULT 'N' NOT NULL ENABLE, 
  "CUSTOMER_ID" VARCHAR2(15), 
  "CREATED_BY" VARCHAR2(20 CHAR), 
  "UPDATED_BY" VARCHAR2(20 CHAR), 
  "CREATED_AT" DATE NOT NULL ENABLE, 
  "UPDATED_AT" DATE NOT NULL ENABLE, 
  "APPROVAL_STATUS" VARCHAR2(1) DEFAULT 'U' NOT NULL ENABLE, 
  "IS_DAILYLIMIT" VARCHAR2(1) NOT NULL ENABLE, 
  "DAILY_LIMIT_AMT" NUMBER NOT NULL ENABLE, 
  "IS_TRANSACTIONLIMIT" VARCHAR2(1) NOT NULL ENABLE, 
  "TRANSACTION_LIMIT_AMT" NUMBER NOT NULL ENABLE, 
  "MOBILE_NO" VARCHAR2(20), 
  "MMID" VARCHAR2(20), 
  "APPROVED_ID" NUMBER(*,0), 
  "EMAIL" VARCHAR2(100 CHAR), 
  "ADDRESS" VARCHAR2(225 CHAR), 
   CONSTRAINT "FT_CUSTOMERS_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS"  ENABLE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS" ;

CREATE TABLE "ESBUSER"."FT_CUSTOMERS_REVISIONS" 
   (  "ID" NUMBER, 
  "NAME" VARCHAR2(100) NOT NULL ENABLE, 
  "CUSTOMER_ID" VARCHAR2(15), 
  "APP_ID" VARCHAR2(20) NOT NULL ENABLE, 
  "ALLOW_NEFT" VARCHAR2(1) NOT NULL ENABLE, 
  "ALLOW_IMPS" VARCHAR2(1) NOT NULL ENABLE, 
  "ALLOW_RTGS" VARCHAR2(1) NOT NULL ENABLE, 
  "ENABLED" VARCHAR2(1) DEFAULT 'N' NOT NULL ENABLE, 
  "CUSTOMERS_ROW_ID" NUMBER, 
  "REVISION_STATUS" VARCHAR2(32), 
  "IDENTITY_USER_ID" VARCHAR2(255) NOT NULL ENABLE, 
  "CREATED_BY" VARCHAR2(20), 
  "UPDATED_BY" VARCHAR2(20), 
  "CREATED_AT" DATE NOT NULL ENABLE, 
  "UPDATED_AT" DATE NOT NULL ENABLE, 
  "APPROVAL_STATUS" VARCHAR2(1) DEFAULT 'U' NOT NULL ENABLE, 
  "IS_DAILYLIMIT" VARCHAR2(1) NOT NULL ENABLE, 
  "DAILY_LIMIT_AMT" NUMBER NOT NULL ENABLE, 
  "IS_TRANSACTIONLIMIT" VARCHAR2(1) NOT NULL ENABLE, 
  "TRANSACTION_LIMIT_AMT" VARCHAR2(22) NOT NULL ENABLE, 
  "MOBILE_NO" VARCHAR2(20), 
  "MMID" VARCHAR2(20), 
  "EMAIL" VARCHAR2(100 CHAR), 
  "ADDRESS" VARCHAR2(225 CHAR), 
   PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS"  ENABLE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS" ;

CREATE TABLE "ESBUSER"."FUNDS_TRANSFERS" 
   (  "ID" NUMBER(38,0) NOT NULL ENABLE, 
  "REQ_NO" VARCHAR2(255 CHAR) NOT NULL ENABLE, 
  "REQ_VERSION" VARCHAR2(10 CHAR) NOT NULL ENABLE, 
  "REQ_TIMESTAMP" DATE NOT NULL ENABLE, 
  "CUSTOMER_ID" VARCHAR2(20 CHAR) NOT NULL ENABLE, 
  "DEBIT_ACCOUNT_NO" VARCHAR2(255 CHAR) NOT NULL ENABLE, 
  "BENE_CODE" VARCHAR2(255 CHAR), 
  "BENE_FULL_NAME" VARCHAR2(255 CHAR), 
  "BENE_ADDRESS1" VARCHAR2(255 CHAR), 
  "BENE_ADDRESS2" VARCHAR2(255 CHAR), 
  "BENE_ADDRESS3" VARCHAR2(255 CHAR), 
  "BENE_POSTAL_CODE" VARCHAR2(255 CHAR), 
  "BENE_CITY" VARCHAR2(255 CHAR), 
  "BENE_STATE" VARCHAR2(255 CHAR), 
  "BENE_COUNTRY" VARCHAR2(255 CHAR), 
  "BENE_CONTACT_EMAIL_ID" VARCHAR2(255 CHAR), 
  "BENE_CONTACT_MOBILE_NO" VARCHAR2(255 CHAR), 
  "BENE_ACCOUNT_NO" VARCHAR2(255 CHAR), 
  "BENE_ACCOUNT_IFSC" VARCHAR2(255 CHAR), 
  "BENE_ACCOUNT_MOBILE_NO" VARCHAR2(255 CHAR), 
  "BENE_ACCOUNT_MMID" VARCHAR2(255 CHAR), 
  "TRANSFER_TYPE" VARCHAR2(4 CHAR), 
  "TRANSFER_AMOUNT" NUMBER, 
  "TRANSFER_CCY" VARCHAR2(255 CHAR), 
  "RMTR_TO_BENE_NOTE" VARCHAR2(255 CHAR), 
  "STATUS_CODE" VARCHAR2(30 CHAR), 
  "BANK_REF" VARCHAR2(50 CHAR), 
  "REP_NO" VARCHAR2(255 CHAR), 
  "REP_VERSION" VARCHAR2(10 CHAR), 
  "REP_TIMESTAMP" DATE, 
  "ATTEMPT_NO" NUMBER(38,0) NOT NULL ENABLE, 
  "FAULT_CODE" VARCHAR2(50 CHAR), 
  "FAULT_REASON" VARCHAR2(1000 CHAR), 
  "REQ_TRANSFER_TYPE" VARCHAR2(4 CHAR), 
  "SERVICE_ID" VARCHAR2(30), 
  "RECONCILED_AT" DATE, 
  "CBS_REQ_REF_NO" VARCHAR2(50), 
  "APP_ID" VARCHAR2(50), 
  "SUB_CODE" VARCHAR2(50 CHAR), 
  "NAME_WITH_BENE_BANK" VARCHAR2(255), 
  "NOTIFY_STATUS" VARCHAR2(100 CHAR), 
  "NOTIFY_ATTEMPT_NO" NUMBER(38,0), 
  "NOTIFY_ATTEMPT_AT" DATE, 
  "NOTIFIED_AT" DATE, 
  "NOTIFY_RESULT" VARCHAR2(50 CHAR), 
  "AADHAAR_NO" VARCHAR2(12 CHAR), 
  "AADHAAR_MOBILE_NO" VARCHAR2(20 CHAR), 
  "BENE_BANK_NAME" VARCHAR2(50 CHAR), 
  "PURPOSE_CODE" VARCHAR2(20 CHAR), 
  "TRANSFER_DATE" TIMESTAMP (6), 
   CONSTRAINT "FUNDS_TRANSFERS_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS"  ENABLE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS" ;

CREATE TABLE "ESBUSER"."ALLPRODUCTCODE"
   (  "ID" NUMBER NOT NULL ENABLE, 
  "SCHEMECODE" VARCHAR2(22), 
  "TRANSFER_TYPE" VARCHAR2(4), 
  "ACTIVE" VARCHAR2(1), 
  "VALIDATION_AT" VARCHAR2(255), 
   CONSTRAINT "PRODCUT_CODE_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS"  ENABLE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS" ;

CREATE TABLE "ESBUSER"."USERS" 
   (  "USER_ID" VARCHAR2(255) NOT NULL ENABLE, 
  "VIEWER" VARCHAR2(255) NOT NULL ENABLE, 
  "CHECKER" VARCHAR2(255) NOT NULL ENABLE, 
  "MAKER" VARCHAR2(255) NOT NULL ENABLE, 
  "APPLICATION_NAME" VARCHAR2(255), 
   CONSTRAINT "PRIMARY_KEY_USER_USERID" PRIMARY KEY ("USER_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS"  ENABLE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "ESBUSER_TBS" ;

ALTER TABLE "ESBUSER"."ALLPRODUCTCODE" ADD (
  "CREATED_BY" VARCHAR2(20 CHAR),
  "UPDATED_BY" VARCHAR2(20 CHAR),
  "CREATED_AT" DATE,
  "UPDATED_AT" DATE,
  "ENABLE" VARCHAR2(1) DEFAULT 'N' NOT NULL ENABLE
  );