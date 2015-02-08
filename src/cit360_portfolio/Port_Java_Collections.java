/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cit360_portfolio;
import java.util.*;

/**
 *
 * @author Faron Young
 */
public class Port_Java_Collections {
    
    public static void main(String[] args) {
        ArrayList<Integer> arraylist = new ArrayList<Integer>();
        LinkedList<Integer> linkedList = new LinkedList<Integer>();
        
        // Adding numbers to the Array List
        arraylist.add(10);
        arraylist.add(100);
        arraylist.add(40);
             
        //Retrieving
        System.out.println(arraylist.get(0));  // get index value
        
        //Indexed for loop Iteration
        System.out.println("\nIteration #1: ");
        for(int i=0; i < arraylist.size(); i++) {
            System.out.println(arraylist.get(i));
        }
        
        System.out.println("\nIteration #2");
        for(Integer value: arraylist) {
            System.out.println(value);
        }
        /* If you intend to add items to your list at the end of your list use ArrayLists
        //However, if you intend to add/remove items in your list at the beginning or middle then use LinkedLists
        This is due to how the lists are processing.  
        
        ArrayLists [1][2][3][4][5]...
        ArrayLists have to create space in the array to add items to the begining or middle, 
        or when deleting it has to shift items withing the array to a new index and is slow.
        
        LinkedLists [1]->[2}->[3]...
                    [1]<-[2]<-[3]...
        LinkedLists are different because the items in the array have a link to the previous & next item in the array.  
        So when you add a new item, java simply changes the pointer before and after the new item, 
        similarly when removing an item in the list as well, just a simple change of the pointers
        */
    }
}
