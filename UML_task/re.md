# UML

## Why UML(intro)
   - It is used to understand and communicate
   - It avoids a lot of details
   - It helps to understand the software system and business process
   - It is not replacement of textual programming language but it is helpful assistant
   - its importance comes from standerization and wide use with object oriented development
   - the UML is not only used in oo only but also non-oo cicles


  ## What is UML?
   - Unified Modelling Language
   - It belongs to Graphical notation family
   - Build using OO
   - It descripes designing software system
   - programming languages is not high enough abstraction to facilitates the discusion about the design
   - Open standard is controlled by OMG(Object Management Group)

  ## Ways using UML
   - There are different ways to use UML and it leads to difficult arguments
   - To untangle this, there are 3 models (sketch, blueprint, programming languages)
   - Most used model in UML is sketck which used to communicate with all aspects of the system
     - sketch can used also in forword and reverse engineering
     - forword engineering: used in design before writting the code
     - reverse enegineering: used when reading the code to understand it
     - With forword sketching you can communicates the ideas and take less time to discuss the ideas rather than using programming that takes a lot of time
     - With reverse sketching you can simplify the classes and not all only the interesting parts before digging in the code
     - the sketching is useful for decumentations
   - UML blueprint
     - It is about completeness
     - It is a details design to code up
     - That requires a little thought
     - blueprint modelling is an interface to subsystems and let the developers work out implementations of those details
     - In reverse blueprint used to get more details informations about the code
     - forward engineering tools used to make digrams and back up it with repository
     - reverse engineering tools used to make digrams from the code
     - some tools use the source code itself as a repostory and the digrams as a graphical view point


## UML as a programming language
  - UML becomes source code
  - notion of forward and reverse engineering doesn't make sence any more because the diagram and source code is the same thing
  - Model drive acheticture (MDA): is standerd appoache to use UML as a programming language
  - Archtype is an how to turn an executable UML into a programming platform like (J3EE, .NET)
  - How can you repersent the behavior logic?
    -  there is UML behavioral models: use case diagram, state digram and activity diagram
  - Element in UML can be mapped dirctly to software System

## ways of UML
  ### UML dependency
   - somepeople thinks that the UML should be independent on programming langauge
   - someothers thinks that independent is oxymoron
  ### UML essence
   - somepeople think its essence is to be a diagram (sketch)
   - someothers think diagram is secondery and its essence is to be meta-model (blueprint)

## Notation vs meta-model
   - **Notation** is a graphical stuff which defines the concepts and items
   - **meta-model** is a diagram which defines the concepts of language and show the relations between features
  ### how much meta-model affects on notation?
   - sketcher don't care
   - blueprinter care
   - it depends on the state
   - it is inportant for UML as a programming language
  ### importance
   - most people involves in development interested in meta-models
   - Notation is important in decomentation


## UML diagrams
   - UML 2 represent 12  official diagram types
   ![alt text](images/UML2_diagrams.png)
   - you can use different elements from any other diagram type (UML is not rigid)
   - classfications of UML diagram types
   ![alt text](images/UML2_classifications.png)


## What is legal UML?
   - Legel UML is what defines as well formed in specifications
   - Like standard of UML
   - But UML is percise language that means there are prescriptive rules and also there are convension rules (that depend on commitee and vendors)
   - Suppressed is when information of something is hidden

## What is UML mean
   - Althogh the specification descripes in greate details that doesn't mean that you know how particular the code look like
   - you only get a rough idea


## UML is not enough
   - in many places it is important to use UML and anthor places you don't have to use it (don't hesitate to unuse UMLs)
   - for example in decision table using table better than using diagrams
   - ![alt text](images/condition_diagram.png)
   - ![alt text](images/condition_table.png)
   


   



