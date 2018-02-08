# ESB CENTER #

## About ESB CENTER ##

EBS App Center allows Admins to create users with different roles:

- Maker
- Checker
- Viewer

These users can perform the following tasks:

- Login with their LDAP credentials.
- All the pages assigned to them according to their roles will be listed, after they enter the app.
- Maker can create new records and update existing records.
- Checker can only Approve or Reject the records created or updated by the Maker.
- Viewer will only be able to view the pages.

##### More Info #####

- [Money Transfer](more-info/money-transfer.md)

## Prerequisite ##

- LAMP Stack
- OCI8
- LDAP

## How to install this project ##

1. Clone or download this project.
2. Go inside the project folder.
3. Run "composer Install".
4. Copy ".env.example" file to ".env file".
5. Run "php artisan key:generate".
6. Run "php artisan config:cache".

