/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cit360_portfolio;

/**
 *
 * @author Faron
 */
public class createThread {
    public static void main(String[] args) {
        Thread t1 = new Thread(new parallel("Bob-1"));  //Thread name "One"
        Thread t2 = new Thread(new parallel("Judy-2"));
        Thread t3 = new Thread(new parallel("Fred-3"));
        Thread t4 = new Thread(new parallel("George-4"));
        Thread t5 = new Thread(new parallel("Lucy-5"));
        
        t1.start(); //Start the Thread
        t2.start();
        t3.start();
        t4.start();
        t5.start();
        
    }
}
