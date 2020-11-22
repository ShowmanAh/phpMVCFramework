# ADR(Action Domain Responder)
Action Domain Responder organizes a single user
interface interaction between an HTTP client and a HTTP server-side application into three distinct roles.
# Components ADR
 - [Action](#Action): is the logic to connect the Domain and Responder. 
   It invokes the Domain with inputs collected from the HTTP Request, then invokes the Responder with the data needed to build an HTTP Response.
 
- [Domain](#Domain): is an entry point to the domain logic forming the core of the application.
   It may be a Transaction Script, Service Layer, Application Service, or something similar.

- [Responder](#Responder): is the presentation logic to build an HTTP Response using data it receives from the Action.
   It deals with status codes, headers and cookies, content, formatting and transformation, templates and views, and so on. 
### <a name="ADR PROCESS">ADR PROCESS</a>
 - The web handler receives an HTTP Request and dispatches it to an Action.
  
 - The Action invokes the Domain, collecting any required inputs to the Domain from the HTTP Request.
 - The Action then invokes the Responder with the data it needs to build an HTTP Response.
 -  The Responder builds an HTTP Response using the data fed to it by the Action.
 -  The Action returns the HTTP Response to the web handler sends the HTTP Response.
 
 ## <a name="toc">Table of Contents</a>

- [Structure](#Structure)
  - [Table of Contents](#table-of-contents)
     - [User Module](#Users-Module)
        - [Actions](#Actions)
            - [RegisterUserActions](#RegisterUserActions)
            - [LoginUserActions](#LoginUserActions)
            
        - [Domain](#Domain) 
           - [Services](#Services) 
                - [RegisterUserActions](#RegisterUserActions)
           - [Models](#Models) 
                - [User](#User)
           - [Events](#Events) 
                - [UserWasRegistered](#UserWasRegistered)
           - [Listeners](#listeners) 
                - [SendResetMail](#SendResetMail)
           - [Requests](#Requests) 
                - [CreateUserFormRequest](#CreateUserFormRequest)
           - [Resources](#Resources) 
                - [UserResource](#UserResource)
           - [Observers](#Observers) 
                - [UserObserver](#UserObserver)
           - [Repositories](#Repositories) 
                - [UserRepository](#UserRepository)
           
        - [Responders](#Responders) 
           - [RegisterUserResponders](#RegisterUserResponders)
           
 
 ## <a name="toc">Table of Contents</a>

- [Back-End Interview Topics](#back-end-interview-topics)
  - [Table of Contents](#table-of-contents)
    - [Programming Languages](#programming-languages)
    
     
