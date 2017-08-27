# vanilla-php-social-network
the name says enough :v

## TODOS:

- create signup functionallity
- create login functionallity
- create code for easy database migrations

## DATABASE:

### PHPSocialNetwork

#### Users
- user_id       INT               AI
- username      VARCHAR   30      
- email         VARCHAR   50
- password      VARCHAR   32
- activation    CHAR      32

#### Rememberme
- id            INT               AI
- auth1         CHAR      64      
- f2auth2       CHAR      64
- user_id       INT       
- expires       DATETIME  

#### Forgotpassword
- id            INT               AI
- user_id       INT               
- rkey          CHAR      32
- time          INT       
- status        VARCHAR   7
