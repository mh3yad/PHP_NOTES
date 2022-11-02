/**
 * Inheritance
 * when inherited, $this in parent class refer to child class
 * when overriding, you can't decrease the access level
 * Return type must be compatible with parent class
 * Const can be overwritten in child, and we access it like static Class::Const
 * final keyword make class non-extendable, and method non-overridden
 * we can't create objects from abstract class
 * Interfaces can describe a set of method and hide the implementation of these method in the implemeting class
 * Interface constants can't be overwritten
 *          Abstract                        vs              Interface
 *          have non-abstract method                        only have abstract methods
 *          support single inheritance                      support multiple inheritance
 *          can have protected methods                     only have public methods
 *          can have data members                         can't have data member
 */