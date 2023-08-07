package twoSum_001;

public class Solution {
    public int[] twoSum(int[] nums, int target) {
        int arraySize = nums.length;
        for( int i = 0; i < arraySize-1; i++)
        {
            for(int j = i + 1; j < arraySize; j++ )
            {
                if (nums[i] + nums[j] == target)
                {
                    return new int[]{i, j};
                }
            }
        }
        return new int[]{};
    }

    public static void main(String[] args) {
        Solution sol = new Solution();
        int[] nums = {2, 7, 11, 15};
        int target = 9;
        int[] result = sol.twoSum(nums, target);
        System.out.println(result[0] + " " + result[1]);
    }
}
