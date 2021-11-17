# An Automated Technique for Empirical Evaluation of Test Repair Approaches by Using Mutation Analysis
This paper has proposed an automated technique that evaluates test repair approaches using mutation analysis.  A tool is developed to demonstrate the applicability of the technique. The tool takes web applications as an input and generates the mutated versions of that web application using our proposed mutation operators. 
The detailed list of supported operators are given below:
1. WIR (Web attribute ID replacement)
2. WHR (Web attribute href replacement)
3. WNR (Web attribute name replacement)
4. WCR (Web attribute class replacement)
5. WTR (Web type replacement)
6. WTHR (Web text to hidden replacement)
7. WVR (Web attribute value replacement)
8. WPR (Web Position replacement)
9. WETR (Web element text replacement)
10. WED (Web element deletion)
11. WPA (Web pattern addition)
12. WRA (Web required attribute addition)
13. WOR (Web remove option under select)
14. WPR (Web PopUp box replacement)
# Basic Requirements
1. Machine: minimum 4GB RAM and 4-core processor
2. OS: Windows 8/10
3. PHP: Version 5
# Using Toolset
1. Step
  Clone the repository using the following command. git clone https://github.com/Misbah-Minhas/MuRepStep
2. Step
  Import database "mutationoperators". 
3. Step
  Add your web pages in the Application Under Test folder. 
4. Step
  Run index.php on web server.


