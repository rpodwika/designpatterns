#Strategy

Strategy pattern gives you ability to change algorithm during application life cycle. In simplier words you can change
part of class that is responsible for algorithms for any algorithm that come from particular algorithm family

#When to use

* When you need to calculate result from some variables using various algorithm
* When class should not care how result is calculated only needs the final return value
* For example when you need to serialize data you can choose JsonStrategy, XmlStrategy, YamlStrategy etc. output comes 
as string but in different format depending on what strategy was used.