# ADR(Action Domain Responders)
Action Domain Responder organizes a single user
interface interaction between an HTTP client and a HTTP server-side application into three distinct roles.
# Components ADR
 - [Action](#Action): is the logic to connect the Domain and Responder. 
   It invokes the Domain with inputs collected from the HTTP Request, then invokes the Responder with the data needed to build an HTTP Response.
 
- [Domain](#Domain): is an entry point to the domain logic forming the core of the application.
   It may be a Transaction Script, Service Layer, Application Service, or something similar.

- [Responder](#Responder): is the presentation logic to build an HTTP Response using data it receives from the Action.
   It deals with status codes, headers and cookies, content, formatting and transformation, templates and views, and so on. 
### <a name="programming-languages">Programming Languages</a>
     
