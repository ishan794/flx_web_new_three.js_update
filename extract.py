import json

transcript_path = "C:/Users/USER/.gemini/antigravity/brain/62f7ba85-4322-44d2-a5f4-aa4ffa90e266/.system_generated/logs/transcript_full.jsonl"

for line in open(transcript_path, 'r', encoding='utf-8'):
    try:
        step = json.loads(line)
        if step.get('type') == 'PLANNER_RESPONSE' and step.get('step_index') < 600:
            for tool in step.get('tool_calls', []):
                target = tool.get('args', {}).get('TargetFile', '')
                if 'home.blade.php' in target or 'app.blade.php' in target or 'style.css' in target:
                    print(f"Step {step.get('step_index')}: {tool.get('name')} -> {target}")
    except:
        pass
