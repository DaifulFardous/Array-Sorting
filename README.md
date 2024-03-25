1.Sorting: The first step in the algorithm is to sort the given array of numbers. Sorting ensures that the array is in ascending order, which is a requirement for binary search to work efficiently.
2.Binary Search: After sorting the array, the algorithm employs binary search to find the index of the target number or determine the index where the target would be inserted to maintain the sorted order.

Initialization: I initialize two pointers, left and right, representing the start and end of the search interval respectively. Initially, left is set to 0, and right is set to the length of the array minus 1.

Binary Search Iteration: We enter a loop where we continuously narrow down the search interval until left is greater than right.

Calculate the midpoint mid of the current search interval using the formula: mid = (left + right) / 2.

Compare the value at the midpoint nums[mid] with the target value:

If nums[mid] equals the target, the target is found, and we return the index mid.

If nums[mid] is less than the target, it means the target must be in the right half of the array, so we adjust the search interval by setting left = mid + 1.

If nums[mid] is greater than the target, it means the target must be in the left half of the array, so we adjust the search interval by setting right = mid - 1.

Termination: The loop terminates when left becomes greater than right, indicating that the target is not found in the array.

Insertion Position: If the target is not found, we return the value of left, which represents the index where the target should be inserted to maintain the sorted order.
