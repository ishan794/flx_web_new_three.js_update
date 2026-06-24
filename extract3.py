import json
import os

transcript_path = "C:/Users/USER/.gemini/antigravity/brain/62f7ba85-4322-44d2-a5f4-aa4ffa90e266/.system_generated/logs/transcript_full.jsonl"

files = {}

for line in open(transcript_path, 'r', encoding='utf-8'):
    try:
        step = json.loads(line)
        # We stop before step 600 which is the end of yesterday's session, including Parallax!
        if step.get('type') == 'PLANNER_RESPONSE' and step.get('step_index') < 600:
            for tool in step.get('tool_calls', []):
                name = tool.get('name')
                args = tool.get('args', {})
                target = args.get('TargetFile', '')
                
                if not target:
                    continue
                    
                if target not in files:
                    backup_path = target.replace('Flxware new', 'Flxware new_backup')
                    if os.path.exists(backup_path):
                        with open(backup_path, 'r', encoding='utf-8') as f:
                            files[target] = f.read()
                    else:
                        files[target] = ""

                if name == 'write_to_file':
                    files[target] = args.get('CodeContent', '')
                elif name == 'replace_file_content':
                    tc = args.get('TargetContent', '')
                    rc = args.get('ReplacementContent', '')
                    if tc in files[target]:
                        files[target] = files[target].replace(tc, rc, 1)
                elif name == 'multi_replace_file_content':
                    for chunk in args.get('ReplacementChunks', []):
                        tc = chunk.get('TargetContent', '')
                        rc = chunk.get('ReplacementContent', '')
                        if tc in files[target]:
                            files[target] = files[target].replace(tc, rc, 1)
    except Exception as e:
        pass

for k, v in files.items():
    if "home.blade.php" in k or "app.blade.php" in k or "style.css" in k:
        print(f"Successfully restored {k}")
        with open(k + ".restored2", "w", encoding='utf-8') as f:
            f.write(v)
