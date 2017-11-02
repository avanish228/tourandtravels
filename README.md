# tourandtravels
fully configured tour and travel cab booking site with sms and mail service included

in this site you will get registration page login page and all which will send text message and mail after booking and cancellation .

one ned to have his or her account on ways to sms and gmail...

please modify the file according to your ways to sms data in following file
tourandtravels/way2sms/sendsms.php

and modify the file according to your gmail data in following files
tourandtravels/send-email-via-gmail-smtp-server-in-php/gmail.php
and
tourandtravels/send-email-via-gmail-smtp-server-in-php1/gmail.php

create a database named as  dark

and import the .sql file in the above directory

one can get commands also in .sql file

Interface

import java.rmi.Remote;
import java.rmi.RemoteException;

public interface Ex6_aRmiServletArithOpnInfc extends Remote{
    public double add(double a,double b) throws RemoteException;
    public double sub(double a,double b) throws RemoteException;
    public double div(double a,double b) throws RemoteException;
    public double mul(double a,double b) throws RemoteException;
    public double mod(double a,double b) throws RemoteException;
}


Interface implementation

import java.rmi.RemoteException; 
import java.rmi.registry.LocateRegistry; 
import java.rmi.registry.Registry; 
import java.rmi.server.UnicastRemoteObject; 

public class Ex6_aRmiArithOpnSvrImplement extends UnicastRemoteObject implements Ex6_aRmiServletArithOpnInfc {

    /**
     * @param args the command line arguments
     */
    double res=0;
    public Ex6_aRmiArithOpnSvrImplement() throws RemoteException
    {
        
    }
    public static void main(String[] args) {
        // TODO code application logic here
        Ex6_aRmiArithOpnSvrImplement svr=null;
        try{
            svr=new Ex6_aRmiArithOpnSvrImplement();
            Registry rgty=LocateRegistry.createRegistry(1400);
            rgty.rebind("JinuRemote", svr);
            System.out.println("Server Running");
            
        }catch(Exception e)
        {
           e.printStackTrace();
        }
    }

    @Override
    public double add(double a, double b) throws RemoteException {
       res=a+b;
       return res;
    }

    @Override
    public double sub(double a, double b) throws RemoteException {
        res=a-b;
       return res;
    }

    @Override
    public double div(double a, double b) throws RemoteException {
        res=a/b;
       return res;
    }

    @Override
    public double mul(double a, double b) throws RemoteException {
        res=a*b;
       return res;
    }

    @Override
    public double mod(double a, double b) throws RemoteException {
        res=a%b;
       return res;
    }
    
}


SERVELET


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException; 
import java.io.*; 
import static java.lang.System.out;
import java.rmi.Naming; 
import java.rmi.NotBoundException; 
import javax.servlet.ServletException; 
import javax.servlet.annotation.WebServlet; 
import javax.servlet.http.HttpServlet; 
import javax.servlet.http.HttpServletRequest; 
import javax.servlet.http.HttpServletResponse; 


@WebServlet(name="Ex6_aRmiArithOpnClientServlet", urlPatterns={"/Ex6_aRmiArithOpnClientServlet"})
public class Ex6_aRmiArithOpnClientServlet  extends HttpServlet {
    protected void processRequest(HttpServletRequest request, HttpServletResponse response) throws ServletException,IOException
    {
     
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter pw=response.getWriter();
        try{
            Ex6_aRmiServletArithOpnInfc ob=null;
            try{
                ob=(Ex6_aRmiServletArithOpnInfc) (Naming.lookup("rmi://localhost:1400/JinuRemote"));
            }catch(NotBoundException nbe){
                nbe.printStackTrace();
            }
            String sN1=request.getParameter("tbNum1");
            String sN2=request.getParameter("tbNum2");
            Double dN1=Double.valueOf(sN1);
            Double dN2=Double.valueOf(sN2);
            
            response.setContentType("text/html;charset=UTF-8");
            out.println("<b><u>Ex6_aRmiArithOpn  Result </u></b> <br><br><br>");
            response.setContentType("text/html;charset=UTF-8");
            pw.println("<b>The Sum of given nos is: </b>"+ob.add(dN1, dN2)+"<br><br><br>");
            response.setContentType("text/html;charset=UTF-8");
            pw.println("<b>The difference of given nos is: </b>"+ob.sub(dN1, dN2)+"<br><br><br>");
            response.setContentType("text/html;charset=UTF-8");
            pw.println("<b>The quoitient of given nos division is: </b>"+ob.div(dN1, dN2)+"<br><br><br>");
            response.setContentType("text/html;charset=UTF-8");
            pw.println("<b>The product of given nos is: </b>"+ob.mul(dN1, dN2)+"<br><br><br>");
            response.setContentType("text/html;charset=UTF-8");
            pw.println("<b>The Modulus of given nos is: </b>"+ob.mod(dN1, dN2));
           }finally{
                pw.close();
            }       
      }
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException,IOException
    {
        processRequest(request, response);
    }
}

passing array java

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package passingarray;

import static java.time.Clock.system;
import java.util.Scanner;

/**
 *
 *
 */
public class PassingArray {

    static
     {
         System.load("C:\\Users\\avanish\\Documents\\NetBeansProjects\\passingarrayC\\desst\\print.dll");
     }

         static int array[];
         public native int[] ArraySorting(int[]array);
         public static void main(String[] args){
             Scanner Sc =new Scanner(System.in);
             System.out.println("Enter the number of elements to be sorted");
             int array_length = Sc.nextInt();
             array = new int[array_length];
             System.out.println("enter the array elements");
             for(int i=0;i<array_length;i++)
             {
                 array[i]=Sc.nextInt();
             }
             int sorted_array[]=new PassingArray().ArraySorting(array);
             System.out.println("After Sorting");
             for(int i=0;i<sorted_array.length;i++)
             {
                 System.out.println(sorted_array[i]+ "\n");
             
             
         }
     }
    
        // TODO code application logic here
   }


passing array c

/* 
 * File:   newmain.c
 * Author: AV KALI PRANAV
 *
 * Created on August 17, 2017, 12:04 AM
 */

#include <stdio.h>
#include <stdlib.h>
#include <jni.h>
#include"header1.h"
 
JNIEXPORT jintArray JNICALL Java_passingarray_PassingArray_ArraySorting
  (JNIEnv *env, jobject obj, jintArray array)
{
 int i,j,temp;
    jsize len=(*env)->GetArrayLength(env,array);
    jint *body = (*env)->GetIntArrayElements(env,array,0);
    for(i=0;i<len;i++)
    {
        for(j=0;j<len;j++)
        {
            if(body[i]>body[j])
            {
                temp=body[i];
                body[i]=body[j];
                body[j]=temp;
            }
        }
    }
    printf(" c Sorting \n");
    for(i=0;i<len;i++)
    {
        printf(" %ld ", body[i]);
    }
    jintArray result=(*env)->NewIntArray(env,len);
    (*env)->SetIntArrayRegion(env,result,0,len,body);
    return result;
            
}in(int argc, char** argv) {

    return (EXIT_SUCCESS);
}


passing object java

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package passingobject;

/**
 *
 * @author
 */
public class Passingobject {
     static
    {
        System.load("C:\\Users\\avanish\\Documents\\NetBeansProjects\\passingobjectC\\dest\\print.dll");
    }
    /**
     * @param args the command line arguments
  */
  int count = 10;
    public void getCountValue() {
        count = count * 10;
        System.out.println("Inside the getCountValue Method" + count);
    }
    public native void changeCountValue();
    public static void main(String[] args) {
        Passingobject po = new Passingobject();
        System.out.println("Before Calling Native Method" + po.count);
        po.changeCountValue();
        System.out.println("After Calling Native Method" + po.count);
    }
}


passing object c
/* 
 * File:   newmain.c
 * Author: AV KALI PRANAV
 *
 * Created on August 16, 2017, 11:53 PM
 */

#include <stdio.h>
#include <stdlib.h>
#include <jni.h>
#include"header.h"
/*
 * 
 */
JNIEXPORT void JNICALL Java_passingobject_Passingobject_changeCountValue
  (JNIEnv *env, jobject jobj)
{
 // Access the Variables from object 
    //1. Extract the Class from Object instance 
    jclass class = (*env)->GetObjectClass(env, jobj);
    //2. Extract the Field Id(variable name) from Class 
    jfieldID fid = (*env)->GetFieldID(env, class, "count", "I");
    //3. Extract the value from Field Id  instance
    int value = (*env)->GetIntField(env,jobj, fid);
    printf("\n Native Count Value %d",value);   
    printf("Changing the Count value in C");
    //4. Modify the count value
    (*env)->SetIntField(env,jobj,fid,18);
    
     //Access the methods    
     jmethodID mid = (*env)->GetMethodID(env, class,"getCountValue", "()V"); 
     // Invoking the non-native method from C.
     (*env)->CallVoidMethod(env,jobj, mid); 
}


exception java

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package exception_difftypes;

/**
 *
 *
 */
public class Exception_Difftypes {
    static{
        System.load("C:\\Users\\avanish\\Documents\\NetBeansProjects\\ExceptionC\\desddfg\\printff.dll");
    }
public native int intmethod(int n);
public native boolean booleanmethod(boolean text);
public native String stringmethod(String text);
public native void doit()throws IllegalArgumentException;
public void callback()throws NullPointerException
{
    throw new NullPointerException("CatchThrow.callback");
}
    public static void main(String[] args) {
       Exception_Difftypes exe = new Exception_Difftypes();
       int a=exe.intmethod(10);
       System.out.println(a);
       boolean b=exe.booleanmethod(true);
       System.out.println(b);
       String str = exe.stringmethod("p");
       System.out.println(str);
      
       try{
          exe.callback();
       }
       catch(NullPointerException e)
       {
         System.out.println("NULL POINTER EXCEPTION");
        
       }
       try {
            exe.doit();
        }
       catch(IllegalArgumentException r)
       {
         System.out.println(r);
        
       }
       
    }
}

exception c

/* 
 * File:   newmain.c
 * Author: AV KALI PRANAV
 *
 * Created on August 17, 2017, 12:18 AM
 */

#include <stdio.h>
#include <stdlib.h>
#include <jni.h>
#include <string.h>
#include <ctype.h>
#include"header2.h"

JNIEXPORT jint JNICALL Java_exception_1difftypes_Exception_1Difftypes_intmethod
  (JNIEnv *env, jobject job, jint n)
{
    jint result;
    result=n*n;
    return result;
            
}
JNIEXPORT jboolean JNICALL Java_exception_1difftypes_Exception_1Difftypes_booleanmethod
  (JNIEnv *env, jobject job, jboolean bo)
{
    jboolean jbool;
    return jbool;
}
JNIEXPORT jstring JNICALL Java_exception_1difftypes_Exception_1Difftypes_stringmethod
  (JNIEnv *env, jobject job, jstring strin)
{
    const char* str = (*env)->GetStringUTFChars(env,strin,NULL);
    char cap[10];
    strcpy(cap,str);
    (*env)->ReleaseStringUTFChars(env,strin, str);
    strupr(cap);
    return (*env)->NewStringUTF(env,cap);    
}
JNIEXPORT void JNICALL Java_exception_1difftypes_Exception_1Difftypes_doit
  (JNIEnv *env, jobject jobj)
{
    jclass newExcCls;
    newExcCls = (*env)->FindClass(env, "java/lang/IllegalArgumentException");
    (*env)->ThrowNew(env, newExcCls, "thrown from C code");
}

