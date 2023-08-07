# Add Two Numbers

This problem is mainly about adding two linked lists which its value reversely stored. For example, the linked list `2 -> 4 -> 3` represents the number `342`. 
The result is just another linked list. The link to the description of the problem is [here](https://leetcode.com/problems/add-two-numbers/description/).

## Solution

The solution is quite straightforward. We just need to add the two numbers and store the result in a new linked list. The only thing we need to pay attention to is the carry. That is why we need to check if the sum is greater than 10. If it is, we need to add the carry to the next sum. What also important is that we need another node to store the head of the result linked list so we can iterate to the next node without replacing the value of the next node.